def urutkan_bubble(daftar_angka):
    total_data = len(daftar_angka)
    
    for iterasi in range(total_data):
        ada_penukaran = False
        
        for indeks in range(0, total_data - iterasi - 1):
            if daftar_angka[indeks] > daftar_angka[indeks + 1]:
                daftar_angka[indeks], daftar_angka[indeks + 1] = daftar_angka[indeks + 1], daftar_angka[indeks]
                ada_penukaran = True
                
        if not ada_penukaran:  
            break

kumpulan_angka = [10, 20, 70, 5, 135, 67, 88, 22]
urutkan_bubble(kumpulan_angka)

print("Hasil pengurutan:", kumpulan_angka)