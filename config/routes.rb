Jetlanding::Application.routes.draw do

  match "/priv" => "index#priv"
  match "/tos" => "index#tos"
  match "/press_kit" => "index#press_kit"
  match "/press_kit\.zip" => "index#press_kit"
  root :to => "index#index"

end
