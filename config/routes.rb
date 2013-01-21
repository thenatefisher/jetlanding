Jetlanding::Application.routes.draw do

    match "/priv" => "index#priv"
    match "/tos" => "index#tos"
    match "/features" => "index#features"

	match "/et/:token" => "index#email_tracker"

	match "/r" => "index#invite_request"

    match "/i/:token" => "index#index"

	root :to => "index#index"

end
