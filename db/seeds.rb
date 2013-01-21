# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

User.create(
	:name => "Jeff Mitchel'",
	:email => "jeff.m@jetdeck.co",
	:company => "Mitchell & Sons",
	:phone => "234-234-2342",
	:source => "Controller"
)