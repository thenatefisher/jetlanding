require 'csv'
CSV.read("#{Rails.root}/db/brokers.csv", {:headers=>true, header_converters: :symbol}).each do |row|
    user = User.find_or_create_by_email(row[:email])
    user.update_attributes(row.to_hash.slice(:first, :fullname, :email, :company, :phone, :source))
    user.update_mp()
end
