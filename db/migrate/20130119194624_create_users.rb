class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :first
      t.string :fullname
      t.string :email
      t.string :token
      t.string :company
      t.string :phone
      t.string :source
      t.text :notes
      t.datetime :requested_at
      t.datetime :sent

      t.timestamps
    end
  end
end
