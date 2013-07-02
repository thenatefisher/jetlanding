Jetlanding::Application.routes.draw do

  match "/priv" => "index#priv"
  match "/tos" => "index#tos"
  resources :charges
  root :to => "index#index"

end
