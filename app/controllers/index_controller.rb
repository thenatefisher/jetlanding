require 'base64'

class IndexController < ApplicationController

	before_filter :sanitize_params

    def invite_request

        # find user record
        @user = User.find_or_create_by_email(params[:email])

        if !@user.blank?

            @user.source ||= "web"
            @user.requested_at = Time.now
            @user.save

            MixPanel.people({
                "$set" => {
                    "$email" => @user.email,
                    "source" => @user.source,
                    "requested_at" => Time.now,
                    "user_token" => @user.token
                },
                "$token" => Jetlanding::Application.config.mixpanel_token,
                "$distinct_id" => @user.token,
                "$ip" => request.remote_ip
            })            

        end

        render :json => @user.marge({:new => true})

    end

	def index

		# find user record
		@user = User.find_by_token(params[:token])

		if !@user.blank?

			# fill in user details for mixpanel
			params = {
				"distinct_id" => @user.token,
				"user_agent" => request.env["HTTP_USER_AGENT"],
				"token" => Jetlanding::Application.config.mixpanel_token,
				"name_tag" => @user.email
			}

			# send event to mixpanel
			MixPanel.track("Opened Annc Link", params)

			# register person
			MixPanel.people({
			    "$set" => {
			        "$name" => @user.name,
			        "company" => @user.company,
			        "$email" => @user.email,
			        "phone" => @user.phone,
			        "source" => @user.source,
			        "sent" => @user.sent,
                    "user_token" => @user.token
			    },
			    "$token" => Jetlanding::Application.config.mixpanel_token,
			    "$distinct_id" => @user.token,
			    "$ip" => request.remote_ip
			})

		end

        # displays index page
		render :index

	end

	def features
		# displays features page
	end

    def tos
        # displays tos page
    end
    
    def priv
        # displays priv pol page
    end        

	# used to track opening announcment emails
	def email_tracker

		# find user record
		@user = User.find_by_token(params[:token])
		
		if !@user.blank?

			# fill in user details for mixpanel
			params = {
				"distinct_id" => @user.token,
				"user_agent" => request.env["HTTP_USER_AGENT"],
				"token" => Jetlanding::Application.config.mixpanel_token,
                "name_tag" => @user.email
			}

			# send event to mixpanel
			MixPanel.track("Opened Annc Email", params)

			# register person
			MixPanel.people({
			    "$set" => {
			        "$name" => @user.name,
			        "company" => @user.company,
			        "$email" => @user.email,
			        "phone" => @user.phone,
			        "source" => @user.source,
			        "sent" => @user.sent,
                    "user_token" => @user.token	        
			    },
			    "$token" => Jetlanding::Application.config.mixpanel_token,
			    "$distinct_id" => @user.token,
			    "$ip" => request.remote_ip
			})

		end

		# send back a blank pixel
		send_data File.read("app/assets/images/t.gif", :mode => "rb"), 
			:filename => "t.gif", 
			:type => "image/gif"

	end
	
end

class MixPanel

  # event: The overall event/category you would like to log this data under
  # properties: A hash of key-value pairs that describe the event. Must include 
  # the Mixpanel API token as 'token' and a unqiue id as 'distinct_id'
  #
  # See http://mixpanel.com/api/ for further detail.
  def self.track(event, properties={})
    return false if !properties.has_key?("token")

    params = {"event" => event, "properties" => properties}
    data = ActiveSupport::Base64.encode64s(JSON.generate(params))
    request = "http://api.mixpanel.com/track/?data=#{data}"

    `curl -s '#{request}' &`
  end

  def self.people(properties={})
    return false if !properties.has_key?("$token")

    data = ActiveSupport::Base64.encode64s(JSON.generate(properties))
    request = "http://api.mixpanel.com/engage/?data=#{data}"

    `curl -s '#{request}' &`
  end

end	