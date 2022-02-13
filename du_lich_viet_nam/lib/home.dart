import 'dart:convert';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

import 'api.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  bool isUpdateBaiViet = true;
  bool isUpdateDiaDanh = true;
  Iterable diadanh = [];
  Iterable baiviet = [];

  @override
  Widget build(BuildContext context) {
    if (isUpdateBaiViet == true) {
      API(url: "http://10.0.2.2:8000/all_bai_viet")
          .getDataString()
          .then((value) {
        baiviet = json.decode(value);
        isUpdateBaiViet = false;
        setState(() {});
      });
    }
    if (isUpdateDiaDanh == true) {
      API(url: "http://10.0.2.2:8000/all_dia_danh")
          .getDataString()
          .then((value) {
        diadanh = json.decode(value);
        isUpdateDiaDanh = false;
        setState(() {});
      });
    }
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
                  child: ListView.builder(
                    scrollDirection: Axis.horizontal,
                    shrinkWrap: true,
                    itemCount: diadanh.length,
                    itemBuilder: (context, index) {
                      return Row(
                        children: <Widget>[
                          Stack(
                            alignment: Alignment(0.0, 0.1),
                            children: [
                              ColorFiltered(
                                colorFilter: ColorFilter.mode(
                                    Colors.black.withOpacity(0.4),
                                    BlendMode.srcOver),
                                child: Image.network(
                                  'http://10.0.2.2:8000/images/' +
                                      diadanh
                                          .elementAt(index)['Hinh_anh']
                                          .toString(),
                                  width: 200,
                                  height: 140,
                                ),
                              ),
                              Positioned(
                                  child: Text(
                                diadanh
                                    .elementAt(index)['Ten_dia_danh']
                                    .toString(),
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
                        ],
                      );
                    },
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
            ListView.builder(
              shrinkWrap: true,
              itemCount: baiviet.length,
              itemBuilder: (context, index) {
                return Container(
                  padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
                  child: Column(
                    children: [
                      Text(
                        baiviet.elementAt(index)['Noi_dung'].toString(),
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
                      Image.network(
                        'http://10.0.2.2:8000/images/' +
                            baiviet.elementAt(index)['Hinh_anh'].toString(),
                        width: 200,
                        height: 140,
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
