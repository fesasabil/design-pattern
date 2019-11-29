# Mediator

Pola desaign behavioral yang memungkinkan kita untuk mengekspos antarmuka terpadu melalui apapun dimana berbagai bagian dari suatu sistem dapat berkomunikasi. Jika tampaknya suatu sistem memiliki terlalu banyak hubungan langsung antar komponen, mungkin sudah saatnya untuk memiliki titik kontrol pusat yang dikomunikasikan oleh komponen. Pola Mediator mempromosikan kopling longgar dengan memastikan bahwa alih-alih komponen merujuk satu sama lain secara eksplisit, interaksi mereka ditangani melalui titik pusat ini. Ini dapat membantu kami memisahkan sistem dan meningkatkan potensi reusabilitas komponen.


# Real-Word-Analogy

Jika kita melihat disuatu bandara ada sebuah menara mercusuar.Menara(mediator) itu berfungsi sebagai penangan atau penghubung antar pesawat pada saat ingin lepas landas maupun mendarat, karena semua komunikasi (pemberitahuan didengarkan atau disiarkan) dilakukan dari pesawat ke menara kontrol, bukan dari pesawat ke pesawat. Pengontrol terpusat adalah kunci keberhasilan sistem ini, dan itulah peran Mediator dalam desain perangkat lunak.


# Referensi

* [Oreilly.com](https://www.oreilly.com/library/view/learning-javascript-design/9781449334840/ch09s06.html)
* [Sourcemaking](https://sourcemaking.com/design_patterns/mediator)
* [Refactoring Guru](https://refactoring.guru/design-patterns/mediator)