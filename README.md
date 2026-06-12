AntriLaundry adalah sistem manajemen laundry berbasis web yang dibangun menggunakan framework Laravel untuk membantu pelanggan melakukan pemesanan laundry, memantau status laundry secara realtime.

Teknologi yang Digunakan : Laravel 10, PHP 8, MySQL, Bootstrap 5, Mailtrap SMTP.

Tampilan home :
<img width="1917" height="1015" alt="Cuplikan layar 2026-06-12 201400" src="https://github.com/user-attachments/assets/240200c9-71e8-4b97-9842-c9d1ad57ca55" />

tampilan saat melakukan registrasi akun untuk mengecek ASVS email verification :
setelah input dan melakukan klik tombol daftar sekarang,  email  verifikasi akan otomatis dikirimkan  ke email yang digunakan registrasi
<img width="1608" height="991" alt="Cuplikan layar 2026-06-12 202018" src="https://github.com/user-attachments/assets/6c2e61f7-727d-4184-948e-f7a9cc20c104" />
<img width="957" height="731" alt="Cuplikan layar 2026-06-12 202350" src="https://github.com/user-attachments/assets/14f0785a-dbe0-40af-9574-77c975d695f6" />


untuk ujicoba verifikasi email digunakan mailtrap :
<img width="1919" height="922" alt="Cuplikan layar 2026-06-12 205701" src="https://github.com/user-attachments/assets/29fa105d-42f0-4601-aa30-4de2dc1805c3" />

jika akun yang registrasi tidak melakukan verifikasi email maka tidak akan bisa login ke sistem meskipun telah memasukkan password yang  benar saat proses registrasi : 
<img width="1919" height="847" alt="Cuplikan layar 2026-06-12 204906" src="https://github.com/user-attachments/assets/2d6d2595-9896-481f-9afd-efe2ef83e90e" />
tampilan akan tetap berada pada halaman login seperti ini sampai user melakukan verifikasi email :
<img width="1917" height="785" alt="Cuplikan layar 2026-06-12 203139" src="https://github.com/user-attachments/assets/93b33877-59fe-4a5e-bffc-509ec6ea4515" />
karena hanya akun terverifikasi yang hanya boleh mengakses dashboard jadi jika tidak memverifikasi email maka di basis data laundry, tabel email_verified_at akan NULL dan  tabel remember_token akan NULL juga karena token hanya terisi saat user  login ke sistem  untuk mendapatkan role sebagai pelanggan yang dapat akses dashboard  :
<img width="1589" height="170" alt="Cuplikan layar 2026-06-12 203019" src="https://github.com/user-attachments/assets/c7f4ca77-f296-413c-b363-17b9ba26e5a7" />

 jika user langsung melakukan verifikasi email maka otomatis diarahkan untuk melakukan login sebelum benar-benar masuk ke dashboard akun :
<img width="1919" height="847" alt="Cuplikan layar 2026-06-12 204906" src="https://github.com/user-attachments/assets/10ee17ca-678e-4d46-a415-10d600c09ffe" />

setelah itu user dapat mengakses halaman dashboard akun :
<img width="1917" height="852" alt="Cuplikan layar 2026-06-12 205127" src="https://github.com/user-attachments/assets/b8f9169f-d192-45da-8bcd-85061e28f8b2" />

hal ini terjadi karena saat melakukan klik verfikasi maka otomatis tabel verified_at akan terisi berdasarkan jam,tanggal dan tahun verifikasi email begitupun dengan tabel  remember_token akan terisi sehingga saat akun klik login akan masuk ke halaman dashboard karena mendapat hak akses dengan role sebagai pelanggan :
<img width="1732" height="171" alt="Cuplikan layar 2026-06-12 210442" src="https://github.com/user-attachments/assets/52e798f0-8aed-4a69-b5b8-845990e02362" />

begitupun jika user lupa password maka email reset password akan dikirim ke email yang digunakan registrasi :
<img width="1808" height="721" alt="Cuplikan layar 2026-06-12 204316" src="https://github.com/user-attachments/assets/9a5272ae-e982-4c63-b6bc-ca8fd282eeaa" />
seteleh itu user akan menerima link reset password(mailtrap) untuk mengganti password baru:
<img width="1913" height="955" alt="Cuplikan layar 2026-06-12 204620" src="https://github.com/user-attachments/assets/d2cbdbfc-d64b-4e6e-a2a6-35a4f54864f8" />
<img width="1919" height="983" alt="Cuplikan layar 2026-06-12 204819" src="https://github.com/user-attachments/assets/f8a7cae8-2737-41f2-ac48-bbf57753859b" />
setelah reset akan otomatis diarahkan ke halaman login :
<img width="1919" height="847" alt="Cuplikan layar 2026-06-12 204906" src="https://github.com/user-attachments/assets/09a5a171-e8f6-4b53-9bb0-5e8fbd6d7c81" />
jika reset password dan proses login berhasil maka user akan bisa kembali ke menu dashboard seperti biasa :
<img width="1917" height="852" alt="Cuplikan layar 2026-06-12 205127" src="https://github.com/user-attachments/assets/07fac5d7-851b-47f8-b9f0-f3be206abb35" />

password yang diinputkan oleh user  juga tidak disimpan dalam bentuk plain text tetapi dalam bentuk hashing(bcrypt) sehingga jika database diretas password tidak akan terbaca dengan mudah :
<img width="1732" height="171" alt="Cuplikan layar 2026-06-12 210442" src="https://github.com/user-attachments/assets/972e79fa-cbd6-4477-b6c9-ac80729e7a53" />

Hanya akun pelanggan yang sudah verifikasi email yang boleh mengakses sistem dashboard akun pelanggan(ASVS middleware auth), sehingga siapa pun yang mencoba akses dashboard dengan mengganti route sperti gambar dibawah akan diarahkan ke halaman login.
<img width="1916" height="980" alt="image" src="https://github.com/user-attachments/assets/376749a2-f93f-4cc3-9d45-f473dde0579a" />
saat klik enter maka akan otomatis ke halaman login bukan dashboard tanpa kecuali akun yang sudah register tapi tidak verifikasi email :
<img width="1484" height="786" alt="Cuplikan layar 2026-06-12 201839" src="https://github.com/user-attachments/assets/c42192e5-8a5b-4a33-814e-9c4c3a51eeca" />














