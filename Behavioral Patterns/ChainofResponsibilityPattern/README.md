# Chain Of Respobility

pola design behavioral yang memungkinkan Anda menyampaikan permintaan di sepanjang rantai penangan. Setelah menerima permintaan, setiap penangan memutuskan untuk memproses permintaan atau meneruskannya ke penangan berikutnya dalam rantai.


# Problem

Bayangkan Anda sedang mengerjakan sistem pemesanan online. Anda ingin membatasi akses ke sistem sehingga hanya pengguna yang diautentikasi yang dapat membuat pesanan. Selain itu, pengguna yang memiliki izin administratif harus memiliki akses penuh ke semua pesanan.

Setelah sedikit perencanaan, Anda menyadari bahwa pemeriksaan ini harus dilakukan secara berurutan. Aplikasi dapat mencoba untuk mengotentikasi pengguna ke sistem setiap kali menerima permintaan yang berisi kredensial pengguna. Namun, jika kredensial tersebut tidak benar dan otentikasi gagal, tidak ada alasan untuk melanjutkan dengan pemeriksaan lainnya.

Dan jika ada banyak sekali request untuk melakukan pengecekan data, dan agar data aman maka kita berniat untuk menambahkan fitur baru dan melakukan pengecekan secara berulang.

Dengan melakukan itu kita membuat code yang kita buat semakin berantakan dan parahnya lagi apabila kita ingin mengapus atau mengubah suatu cek maka akan berpengaruh pada keseluruhan yang ada pada fitur cek tersebut.


# Solution

Maka dari itu solusi terbaik agar data mempunyai kelasnya sendiri dan tidak berpengaruh kepada kelas lainnya.Sangat bagus jika kita menggunakan konsep **Chain Of Responsibility Desgin pattern**


# Referensi

* [Refactoring Guru](https://refactoring.guru/design-patterns/chain-of-responsibility)
* [Sourcemaking](https://sourcemaking.com/design_patterns/chain_of_responsibility)