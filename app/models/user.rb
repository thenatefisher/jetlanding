class User < ActiveRecord::Base

  attr_accessible :first, :email, :company, :phone, :source, :fullname
  
  before_create { set_defaults() }

  def set_defaults()

    # generate token
    generate_token(:token)
    
  end
  
  def generate_token(column)
    begin
      self[column] = SecureRandom.urlsafe_base64
    end while User.exists?(column => self[column])
  end

  def update_mp
      MixPanel.people({
          "$set" => {
              "$name" => self.fullname,
              "$first_name" => self.first,
              "company" => self.company,
              "$email" => self.email,
              "phone" => self.phone,
              "source" => self.source,
              "sent" => self.sent,
              "user_token" => self.token         
          },
          "$token" => Jetlanding::Application.config.mixpanel_token,
          "$distinct_id" => self.token
      })    
  end

end

class MixPanel

  def self.people(properties={})
    return false if !properties.has_key?("$token")

    data = ActiveSupport::Base64.encode64s(JSON.generate(properties))
    request = "http://api.mixpanel.com/engage/?data=#{data}"

    `curl -s '#{request}' &`
  end

end 