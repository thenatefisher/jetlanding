class AnnouncementMailer < ActionMailer::Base

    default from: "Nate Fisher <nate@jetdeck.co>"
    
    def send_message(user)
      @user = user
      mail  :to => @user.email, 
            :subject => "JetDeck CRM for Aircraft Brokers"
    end
    
end
