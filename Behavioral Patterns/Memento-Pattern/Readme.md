# Memento

pola design pattern yang memungkinkan Anda menyimpan dan mengembalikan keadaan objek sebelumnya tanpa mengungkapkan detail implementasinya.


# Real-Word-Analogy

Perhatikan kontrol volume televisi Anda. Tidak peduli apakah Anda memiliki layar CRT lama atau layar OLED terbaru, perilaku mendasar mengubah volume bekerja sama. Televisi (atau penerima, speaker, dll) memiliki status volume yang disimpan. Jika volumenya diatur ke 3, dan Anda tidak dapat cukup mendengar nada lembut dan halus Morgan Freeman, Anda mungkin akan memutar kenop atau menekan remote Anda untuk menghidupkannya hingga 11! Tindakan mengubah status volume dari 3 menjadi 11 adalah bentuk sederhana dari pola *Memento*, di mana kami mengubah status suatu objek (volume, dalam hal ini) menjadi nilai baru. Secara kritis, kami juga dapat mengembalikan perubahan itu kapan saja, kembali ke nilai status volume apa pun yang kami miliki sebelumnya. Untuk televisi lama proses ini akan menjadi tambahan, artinya kita beralih dari 3 menjadi 4 menjadi 5, dan seterusnya. Namun, pada beberapa televisi yang lebih baru, kita dapat secara eksplisit memilih nilai untuk melompat, membuat perubahan dari 3 menjadi 11 dalam satu langkah. Apapun, kedua teknik ini biasanya digunakan dalam implementasi pola design *Memento*.


# Referensi

* [Airbrake.io](https://airbrake.io/blog/design-patterns/memento-design-pattern)
* [Sourcemaking](https://sourcemaking.com/design_patterns/memento/php)
* [Refactoring Guru](https://refactoring.guru/design-patterns/memento)