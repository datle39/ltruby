a = -2.0
b = 2
c = -1.0
if a == 0
	puts "Khong phai phuong trinh bac 2!"
else
	delta = b*b - 4*a*c
	if delta < 0
		puts "Phuong trinh vo nghiem!"
	elsif delta == 0
		x = -b/(2*a)
		puts "Phuong trinh co nghiem duy nhat x = #{x}"
	else
		sdelta = Math.sqrt(delta)
		x1 = (-b+sdelta)/(2*a)
		x2 = (-b-sdelta)/(2*a)
		puts "Phuong trinh co nghiem x1 = #{x1}, x2 = #{x2}"
	end
end
