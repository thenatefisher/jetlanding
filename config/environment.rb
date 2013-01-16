# Load the rails application
require File.expand_path('../application', __FILE__)

# Initialize the rails application
Jetlanding::Application.initialize!

# Use SendGrid
ActionMailer::Base.smtp_settings = {
  :user_name => "jetdeck",
  :password => "SendGrid1",
  :domain => "jetdeck.co",
  :address => "smtp.sendgrid.net",
  :port => 587,
  :authentication => :plain,
  :enable_starttls_auto => true
}