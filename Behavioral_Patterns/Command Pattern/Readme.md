# Command Pattern

Pola design behavioral yang mengubah permintaan menjadi objek yang berisi semua informasi tentang permintaan. Transformasi ini memungkinkan Anda membuat parameter dengan berbagai permintaan, menunda atau mengantri eksekusi permintaan, dan mendukung operasi yang tidak dapat dibatalkan.


<!-- # Problem

Bayangkan jika anda sedang membuat aplikasi text editor dan disana anda mempunyai banyak sekali tombol Button dan setiap tombol itu mempunyai fungsinya masing-masing.Maka dari itu kita tidak akan memuat code yang sama pada semua tombol karena fungsi mereka itu berbeda - beda.

Cara paling sederhana untuk mengatasi masalah ini dengan membaginya ke beberapa subclass.tetapi jika kita ingin menambahkan fitur terbaru berupa Shortcut atau lainnya maka cara mudahnya kita bisa mengcopynya akan tetapi jika seperti itu setiap saat maka aplikasi yang kita buat akan sangat berat, sangat susah untuk dimaintained dan juga membuat tampilan GUI kita akan terlalu bergantung pada logic bisnis yang kita buat. -->


# Real-World Analogy

Ketika kita sedang pergi ke sebuah restoran maka kita akan di datangi oleh seorang pelayan dan si pelayan itu menuliskan semua pesanan kita pada sebuah kertas dan kertas itu dibawa oleh pelayan untuk ditempelkan pada dinding dapur, beberapa saat kemudian pesanan itu sampai kepada sang koki dan dia akan memasakan menu sesuai dengan yang tertera pada kertas itu dan kemudian juru masak memisahkan makanan ke nampan nampan.Setelah itu pelayan akan memeriksa apakah makanan itu sesuai dengan yang kita pesan dan akan menaruhnya pada meja kita.

Jadi kertas tadi berfungsi sebagai perintah dalam antrian, Sampai sang koki siap untuk menyajikannya.Pesanan berisi semua informasi relevan yang diperlukan untuk memasak makanan. Ini memungkinkan koki untuk mulai memasak langsung dari pada harus mengklarifikasi detail pesanan dari Anda secara langsung.


# Solution

Jadi jika kita ingin membuat sebuah perangkat lunak yang baik, ada baiknya kita menerapkan konsep **Command Pattern** pada aplikasi yang kita buat.


# Referensi

* [Refactoring Guru](https://refactoring.guru/design-patterns/command)
* [Sourcemaking](https://sourcemaking.com/design_patterns/command)