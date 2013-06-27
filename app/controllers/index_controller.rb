class IndexController < ApplicationController

  before_filter :sanitize_params

  def index

  end

  def support
    # displays features page
  end

  def tos
    # displays tos page
  end

  def priv
    # displays priv pol page
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
