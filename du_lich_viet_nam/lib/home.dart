import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.purple.shade100,
      appBar: AppBar(
          backgroundColor: Colors.purple.shade200,
          automaticallyImplyLeading: false,
          title: Container(
            child: TextField(
              decoration: InputDecoration(
                contentPadding: EdgeInsets.symmetric(vertical: 10),
                prefixIcon: Icon(Icons.search_outlined),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.all(Radius.circular(10)),
                ),
                hintText: 'Enter a search term',
              ),
            ),
          )),
      body: ListView(children: [
        Column(
          children: [
            Container(
              padding: EdgeInsets.symmetric(vertical: 10),
              child: Column(children: [
                Row(children: [
                  Text(
                    "Destination",
                    style: TextStyle(
                      fontSize: 22,
                      color: Colors.black87,
                    ),
                  ),
                ]),
                Container(
                  margin: const EdgeInsets.symmetric(vertical: 10.0),
                  height: 140.0,
                  child: ListView(
                    scrollDirection: Axis.horizontal,
                    children: <Widget>[
                      Stack(
                        alignment: Alignment(0.0, 0.1),
                        children: [
                          ColorFiltered(
                            colorFilter: ColorFilter.mode(
                                Colors.black.withOpacity(0.4),
                                BlendMode.srcOver),
                            child: Image.asset(
                              'assets/image/toathanhtayninh.jpg',
                              width: 200,
                              height: 140,
                            ),
                          ),
                          Positioned(
                              child: Text(
                            "Tây Ninh",
                            style: TextStyle(
                                fontWeight: FontWeight.bold,
                                fontSize: 18,
                                color: Colors.white),
                          )),
                          Positioned(
                              bottom: 40,
                              child: Text(
                                "24 Trip",
                                style: TextStyle(
                                    fontSize: 16, color: Colors.white70),
                              ))
                        ],
                      ),
                      Stack(
                        alignment: Alignment(0.0, 0.1),
                        children: [
                          ColorFiltered(
                            colorFilter: ColorFilter.mode(
                                Colors.black.withOpacity(0.4),
                                BlendMode.srcOver),
                            child: Image.asset(
                              'assets/image/banahills.jpg',
                              width: 200,
                              height: 140,
                            ),
                          ),
                          Positioned(
                              child: Text(
                            "Đà Nẵng",
                            style: TextStyle(
                                fontWeight: FontWeight.bold,
                                fontSize: 18,
                                color: Colors.white),
                          )),
                          Positioned(
                              bottom: 40,
                              child: Text(
                                "48 Trip",
                                style: TextStyle(
                                    fontSize: 16, color: Colors.white70),
                              ))
                        ],
                      ),
                      Stack(
                        alignment: Alignment(0.0, 0.1),
                        children: [
                          ColorFiltered(
                            colorFilter: ColorFilter.mode(
                                Colors.black.withOpacity(0.4),
                                BlendMode.srcOver),
                            child: Image.asset(
                              'assets/image/nuiba.jpg',
                              width: 200,
                              height: 140,
                            ),
                          ),
                          Positioned(
                              child: Text(
                            "An Giang",
                            style: TextStyle(
                                fontWeight: FontWeight.bold,
                                fontSize: 18,
                                color: Colors.white),
                          )),
                          Positioned(
                              bottom: 40,
                              child: Text(
                                "18 Trip",
                                style: TextStyle(
                                    fontSize: 16, color: Colors.white70),
                              ))
                        ],
                      ),
                      Stack(
                        alignment: Alignment(0.0, 0.1),
                        children: [
                          ColorFiltered(
                            colorFilter: ColorFilter.mode(
                                Colors.black.withOpacity(0.4),
                                BlendMode.srcOver),
                            child: Image.asset(
                              'assets/image/hoian.jpg',
                              width: 200,
                              height: 140,
                            ),
                          ),
                          Positioned(
                              child: Text(
                            "Huế",
                            style: TextStyle(
                                fontWeight: FontWeight.bold,
                                fontSize: 18,
                                color: Colors.white),
                          )),
                          Positioned(
                              bottom: 40,
                              child: Text(
                                "18 Trip",
                                style: TextStyle(
                                    fontSize: 16, color: Colors.white70),
                              ))
                        ],
                      ),
                      Stack(
                        alignment: Alignment(0.0, 0.1),
                        children: [
                          ColorFiltered(
                            colorFilter: ColorFilter.mode(
                                Colors.black.withOpacity(0.4),
                                BlendMode.srcOver),
                            child: Image.asset(
                              'assets/image/biennhatrang.jpg',
                              width: 200,
                              height: 140,
                            ),
                          ),
                          Positioned(
                              child: Text(
                            "Nha Trang",
                            style: TextStyle(
                                fontWeight: FontWeight.bold,
                                fontSize: 18,
                                color: Colors.white),
                          )),
                          Positioned(
                              bottom: 40,
                              child: Text(
                                "18 Trip",
                                style: TextStyle(
                                    fontSize: 16, color: Colors.white70),
                              ))
                        ],
                      ),
                    ],
                  ),
                ),
              ]),
            ),
            Row(children: [
              Text(
                "Feature Trip",
                style: TextStyle(
                  fontSize: 22,
                  color: Colors.black87,
                ),
              ),
            ]),
            Container(
              padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
              child: Column(
                children: [
                  Text(
                    "Bà Nà hills",
                    style: TextStyle(
                      fontSize: 23,
                      fontWeight: FontWeight.bold,
                      color: Colors.black87,
                    ),
                  ),
                  Text(
                    "2 day",
                    style: TextStyle(
                      fontSize: 18,
                      color: Colors.grey[700],
                    ),
                  ),
                  Image.asset(
                    'assets/image/banahills.jpg',
                    height: 270,
                  ),
                ],
              ),
            ),
            ListView.builder(
              shrinkWrap: true,
              itemCount: 5,
              itemBuilder: (context, index) {
                return Container(
                  padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
                  child: Column(
                    children: [
                      Text(
                        "Bà Nà hills",
                        style: TextStyle(
                          fontSize: 23,
                          fontWeight: FontWeight.bold,
                          color: Colors.black87,
                        ),
                      ),
                      Text(
                        "2 day",
                        style: TextStyle(
                          fontSize: 18,
                          color: Colors.grey[700],
                        ),
                      ),
                      Image.asset(
                        'assets/image/banahills.jpg',
                        height: 270,
                      ),
                    ],
                  ),
                );
              },
            )
          ],
        ),
      ]),
    );
  }
}
