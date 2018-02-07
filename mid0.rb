# coding: utf-8

require 'gmail'
require 'mail'

#require 'base64'

username = '********' # Gmailのユーザ名
password = '***********' # Gmailのパスワード

label_name = 'dsoi' # 対象のラベル名
loop do

begin
Gmail.connect(username, password) do |gmail|
  email = gmail.label(label_name).emails.first

  sabu= email.subject
  add= email.body.decoded.encode('UTF-8', email.charset)
  email.delete!
  puts add
  
=begin
  ais=add.include?("base64")
  if ais
  ase = Regexp.new("base64")
  meri = ase =~ add
  #add=  Base64.decode64(add)
  meri=meri+8
  meeri = Regexp.new("=")
  for i in meri..add.length
    if meeri =~ add[i]
        meeri=i
        break
    end
  end
add=add[meri..meeri]
add=Base64.decode64(add)
start=0
  qoo = Regexp.new("http")
loop do
morimo = qoo =~ add[start..add.length]
if morimo != nil
  start=morimo
  link = add[start..add.length]
    oek=link.split(" ")
    link=oek[0]
    puts link+" "
    start=start+1

else
  break
      end

    end
  else
    start=0
      qoo = Regexp.new("http")
    loop do
    morimo = qoo =~ add[start..add.length]
    if morimo != nil
      start=morimo
      link = add[start..add.length]
        oek=link.split(" ")
        link=oek[0]
        puts link+" "
        start=start+1

    else
      break
          end

        end
    end
=end
end
rescue
  break
end
end
