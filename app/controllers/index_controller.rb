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


end
