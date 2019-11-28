# Template Method
pola design behavioral yang mendefinisikan kerangka suatu algoritma dalam superclass tetapi memungkinkan subclass menimpa langkah-langkah spesifik dari algoritma tanpa mengubah strukturnya.

# Masalah

Bayangkan bahwa Anda sedang membuat aplikasi penambangan data yang menganalisis dokumen perusahaan. Pengguna memberi dokumen aplikasi dalam berbagai format (PDF, DOC, CSV), dan mencoba mengekstrak data yang bermakna dari dokumen ini dalam format yang seragam.

Pada titik tertentu, Anda memperhatikan bahwa ketiga kelas memiliki banyak kode yang serupa. Sementara kode untuk menangani berbagai format data sama sekali berbeda di semua kelas, kode untuk pemrosesan dan analisis data hampir identik. Bukankah lebih baik untuk menghilangkan duplikasi kode, membiarkan struktur algoritma tetap utuh?

# Solution

Maka dari itu solusi terbaik jika ingin menambahkan data tanpa harus mengubah struktur algoritma yang lama, Sangat bagus jika kita menggunakan konsep **Template Method Design Pattern**.

# Referensi

* [Design Pattern PHP](https://github.com/triabagus/Design-Patern-PHP/blob/master/2.Behavioral%20Pattern/Template%20Method/app.php)
* [programmer Jaman Now](https://www.youtube.com/watch?v=kg0yMIkWUTc&list=PL-CtdCApEFH_yiziXrQeogYOJzCmD8XLM&index=11)
* [Refactoring Guru](https://refactoring.guru/design-patterns/template-method)