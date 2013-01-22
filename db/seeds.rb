require 'csv'
CSV.read("#{Rails.root}/db/brokers.csv", {:headers=>true, header_converters: :symbol}).each do |row|
    user = User.find_by_email(row[:email])
    if user.blank?
        user = User.create(row.to_hash.slice(:email, :first, :fullname, :email, :company, :phone, :source))
        user.update_mp()
    end
end
