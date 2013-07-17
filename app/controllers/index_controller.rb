class IndexController < ApplicationController

  before_filter :sanitize_params

  def index
  end

  def tos
    # displays tos page
    render layout: "tos", action: "index"
  end

  def priv
    # displays priv pol page
    render layout: "priv", action: "index"
  end

  def press_kit

    mixpanel = Mixpanel::Tracker.new(
      Jetlanding::Application.config.mixpanel_token, 
      { :async => true, :env => request.env }
    )

    mixpanel.track_event "Downloaded Press Kit"

    send_file File::open(Rails.root.join('private', 'press_kit.zip')), 
      :type => 'application/zip',
      :disposition => 'inline',
      :filename => "press_kit.zip"

  end

end
