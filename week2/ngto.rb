print "Nhap 1 so nguyen duong: "
a = gets()
a = a.to_i
b = 0
print "Cac so nguyen to nho hon #{a} la: "
for i in 2..(a-1)
	for j in 1..i 
		if i % j == 0
			b = b+1
		end
	end
	if b == 2
		print "#{i} "
	end
	b = 0
end
puts ""