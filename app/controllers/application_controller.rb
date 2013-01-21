class ApplicationController < ActionController::Base
  
  protect_from_forgery

  include ActionView::Helpers::SanitizeHelper
    
  def sanitize_params
  
    sanitize_array(params) if !params.blank?
    
  end

  def sanitize_array(arr)

  	arr.each do |k,v|
  		
  		if v.class.name == "Hash"
  			
  			sanitize_array(v)
  			
  		elsif v.class.name == "String"
  			
  			tags = %w(a acronym b strong i em li ul ol h1 h2 h3 h4 h5 h6 blockquote br cite sub sup ins p)
  			output = sanitize(v, :tags => tags, :attributes => %w(href title))
  			arr[k] = output
  			
  		end
  		
  	end

  end
      
end
