class RequestConfirmationMailer < ActionMailer::Base

    default from: "JetDeck <support@jetdeck.co>"
    
    def message(recipient)
      @recipient = recipient
      mail  :to => recipient.email, 
            :subject => "Thanks for joining the JetDeck invite list."
    end
    
end
