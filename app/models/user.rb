class User < ActiveRecord::Base

  attr_accessible :name, :email, :company, :phone, :source
  
  before_create { set_defaults() }
  before_save { update_mp() }

  def set_defaults()

    # generate token
    generate_token(:token)
    
  end
  
  def generate_token(column)
    begin
      self[column] = SecureRandom.urlsafe_base64
    end while User.exists?(column => self[column])
  end

  def update_mp
  end

end
