Jetlanding::Application.routes.draw do

  match "/priv" => "index#priv"
  match "/tos" => "index#tos"
  match "/support" => "index#support"
  resources :charges
  root :to => "index#index"

end
