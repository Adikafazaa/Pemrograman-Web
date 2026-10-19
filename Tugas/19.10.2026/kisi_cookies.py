    print('-SELAMAT DATANG DI KISI COOKIES-')

    nama = str(input('Masukan nama anda: '))
    alamat = str(input('Masukan alamat anda: '))
    no_telp = str(input('Masukan no telp: '))
    tanggal = str(input('Masukan tanggal pemesanan (DD-MM-YYYY): '))
    member = str(input('Masukan member anda(y/n): '))

    nastar = 50000

    lidah_kucing = 60000

    putri_salju = 30000

    print('\n--        NAMA MENU        --\n')
    print('1. Nastar')
    print('2. Lidah kucing')
    print('3. Putri salju')
    print('\n-----------------------------')
    pilih_menu = int(input('Masukan nomor menu yang ingin anda pesan(1/2/3): '))

    if (pilih_menu == 1) and (member == 'y'):
        pilih_menu = nastar
        print('\n -- Jenis --')
        print('1. Original')
        print('2. Keju\n')
        jenis_nastar = int(input('Masukan rasa nastar(1/2): '))
        if jenis_nastar == 1:
            print('\n-- Ukuran --')
            print('1. Kecil')
            print('2. Besar\n')
            ukuran = int(input('Masukan jenis ukuran anda(1/2): '))
            if ukuran == 1:
                harga_awal = pilih_menu
                diskon = harga_awal * 0.2
                total = diskon - harga_awal
                print('Total pembelian: Rp ', total)
            else: 
                total = pilih_menu
                total = total + 20000
                print('Total pembelian: Rp ', total)
        else:
            total = pilih_menu
            total = total + 20000
            print('\n-- Ukuran --')
            print('1. Kecil')
            print('2. Besar\n')
            ukuran = int(input('Masukan jenis ukuran anda(1/2): '))
            if ukuran == 1:
                total = pilih_menu
                print('Total pembelian: Rp ', total)
            else: 
                total = pilih_menu
                total = total + 20000
                print('Total pembelian: Rp ', total)
                
    elif pilih_menu == 2:
        pilih_menu = lidah_kucing
        print('\n-- Ukuran --')
        print('1. Kecil')
        print('2. Besar\n')
        ukuran = int(input('Masukan jenis ukuran anda(1/2): '))
        if ukuran == 1:
            total = pilih_menu
            print('Total pembelian: Rp ', total)
        else: 
            total = pilih_menu
            total = total + 20000
            print('Total pembelian: Rp ', total)

    else:
        pilih_menu = putri_salju
        print('\n -- Jenis --')
        print('1. Original')
        print('2. Keju\n')
        jenis_nastar = int(input('Masukan rasa putri salju(1/2): '))
        if jenis_nastar == 1:
            print('\n-- Ukuran --')
            print('1. Kecil')
            print('2. Besar\n')
            ukuran = int(input('Masukan jenis ukuran anda(1/2): '))
            if ukuran == 1:
                total = pilih_menu
                print('Total pembelian: Rp ', total)
            else: 
                total = pilih_menu
                total = total + 20000
                print('Total pembelian: Rp ', total)
        else:
            total = pilih_menu
            total = total + 20000
            print('\n-- Ukuran --')
            print('1. Kecil')
            print('2. Besar\n')
            ukuran = int(input('Masukan jenis ukuran anda(1/2): '))
            if ukuran == 1:
                total = pilih_menu
                print('Total pembelian: Rp ', total)
            else: 
                total = pilih_menu
                total = total + 20000
                print('Total pembelian: Rp ', total)

