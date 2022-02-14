from FootballTeam import FootballTeam

# tim pertama setter
tim1 = FootballTeam()
tim1.setNamaTim("Persib")
tim1.setNegara("Indonesia")
tim1.setTahun(1933)
tim1.setPemain("Mario Jardel")

# tim kedua input
print("Masukkan Tim Kedua")
namaTim = str(input("Nama Tim : "))
negara = str(input("Negara : "))
tahun = str(input("Tahun Berdiri : "))
pemain = str(input("Pemain : "))

# konstruktor
tim2 = FootballTeam(namaTim, negara, tahun, pemain)

# menampilkan tim pertama
print("==================================")
print("Tim Pertama")
print("==================================")
print("Nama Tim : " + str(tim1.getNamaTim())) 
print("Negara : " + str(tim1.getNegara())) 
print("Tahun Berdiri : " + str(tim1.getTahun())) 
print("Pemain : " + str(tim1.getPemain()))

# menampilkan tim kedua
print("==================================")
print("Tim Kedua")
print("==================================")
print("Nama Tim : " + str(tim2.getNamaTim())) 
print("Negara : " + str(tim2.getNegara())) 
print("Tahun Berdiri : " + str(tim2.getTahun())) 
print("Pemain : " + str(tim2.getPemain()))
print("==================================")