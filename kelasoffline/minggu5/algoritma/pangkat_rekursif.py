def pangkat_rekursif (a,b):
    if b==0:
        return 1
    else:
        return a*pangkat_rekursif(a,b-1)

a=int(input("Masukkan bilangan: "))
b=int(input("Masukkan pangkat: "))
hasil=pangkat_rekursif(a,b)
print("Hasil ",a," pangkat ",b," = ",hasil)