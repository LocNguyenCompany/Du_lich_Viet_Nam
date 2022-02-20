import 'dart:convert';

import 'package:du_lich_viet_nam/detail.dart';
import 'package:du_lich_viet_nam/list_content.dart';
import 'package:du_lich_viet_nam/primary.dart';
import 'package:flutter/material.dart';

import 'api.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  Iterable diadanh = [];
  Iterable baiviet = [];

  Future<void> load() async {
    await API(url: pUrl + "/all_bai_viet").getDataString().then((value) {
      baiviet = json.decode(value);
    });
    await API(url: pUrl + "/all_dia_danh").getDataString().then((value) {
      diadanh = json.decode(value);
    });

    setState(() {});
  }

  @override
  void initState() {
    super.initState();
    load();
  }

  @override
  Widget build(BuildContext context) {
    return LayoutBuilder(
        builder: (BuildContext context, BoxConstraints constraints) {
      return Scaffold(
        backgroundColor: pColor,
        appBar: AppBar(
            backgroundColor: pAppbarColor,
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
                padding: EdgeInsets.all(10),
                child: Column(children: [
                  Row(children: [
                    Text(
                      "Địa danh",
                      style: TextStyle(
                        fontSize: 22,
                        color: Colors.black87,
                      ),
                    ),
                  ]),
                  diadanh.isNotEmpty
                      ? Container(
                          margin: const EdgeInsets.symmetric(vertical: 10.0),
                          height: 140.0,
                          child: ListView.builder(
                            scrollDirection: Axis.horizontal,
                            shrinkWrap: true,
                            itemCount: diadanh.length,
                            itemBuilder: (context, index) {
                              return Row(
                                children: <Widget>[
                                  GestureDetector(
                                    onTap: () {
                                      Navigator.push(
                                          context,
                                          MaterialPageRoute(
                                              builder: (context) => ListContent(
                                                    diadanh: diadanh
                                                        .elementAt(index),
                                                  )));
                                    },
                                    child: Container(
                                      margin: EdgeInsets.only(right: 15),
                                      child: Stack(
                                        alignment: Alignment(0.0, 0.1),
                                        children: [
                                          ColorFiltered(
                                            colorFilter: ColorFilter.mode(
                                                Colors.black.withOpacity(0.4),
                                                BlendMode.srcOver),
                                            child: Image.network(
                                              'http://10.0.2.2:8000/images/' +
                                                  diadanh
                                                      .elementAt(
                                                          index)['Hinh_anh']
                                                      .toString(),
                                            ),
                                          ),
                                          Positioned(
                                              child: Text(
                                            diadanh
                                                .elementAt(
                                                    index)['Ten_dia_danh']
                                                .toString(),
                                            style: TextStyle(
                                                fontWeight: FontWeight.bold,
                                                fontSize: 18,
                                                color: Colors.white),
                                          )),
                                          Positioned(
                                              bottom: 40,
                                              child: Text(
                                                "24 bài viêt",
                                                style: TextStyle(
                                                    fontSize: 16,
                                                    color: Colors.white70),
                                              ))
                                        ],
                                      ),
                                    ),
                                  ),
                                ],
                              );
                            },
                          ),
                        )
                      : Center(child: CircularProgressIndicator()),
                ]),
              ),
              Row(children: [
                Container(
                  padding: EdgeInsets.all(10),
                  child: Text(
                    "Top 3 bài viết nổi bật",
                    style: TextStyle(
                      fontSize: 22,
                      color: Colors.black87,
                    ),
                  ),
                ),
              ]),
            ],
          ),
          baiviet.isNotEmpty
              ? Column(
                  children: List.generate(
                      3,
                      (index) => GestureDetector(
                            onTap: () {
                              Navigator.push(
                                  context,
                                  MaterialPageRoute(
                                      builder: (context) => DetailPage(
                                          baiviet: baiviet.elementAt(index))));
                            },
                            child: Container(
                              margin: EdgeInsets.all(8),
                              padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
                              constraints: BoxConstraints(
                                  maxWidth: MediaQuery.of(context).size.width),
                              decoration: BoxDecoration(
                                  border: Border.all(color: Colors.grey),
                                  borderRadius:
                                      BorderRadius.all(Radius.circular(8)),
                                  color: Colors.white,
                                  boxShadow: [
                                    BoxShadow(
                                        blurRadius: 10,
                                        color: Colors.black,
                                        offset: Offset(5, 5))
                                  ]),
                              child: Padding(
                                padding: const EdgeInsets.only(left: 10),
                                child: Column(
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(
                                      "",
                                      style: TextStyle(
                                          fontSize: 25,
                                          fontWeight: FontWeight.bold),
                                    ),
                                    Container(
                                      padding:
                                          EdgeInsets.fromLTRB(0, 10, 10, 10),
                                      child: Image.network(
                                        pUrl +
                                            "/images/" +
                                            baiviet
                                                .elementAt(index)['Hinh_anh']
                                                .toString(),
                                        fit: BoxFit.fitWidth,
                                        width:
                                            MediaQuery.of(context).size.width,
                                      ),
                                    ),
                                    Text(
                                      baiviet
                                              .elementAt(index)['Noi_dung']
                                              .toString()
                                              .substring(0, 20) +
                                          "...",
                                      style: TextStyle(fontSize: 20),
                                    ),
                                    Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.spaceEvenly,
                                      children: [
                                        Row(
                                          children: [
                                            Icon(Icons.thumb_up_alt_outlined),
                                            Padding(
                                              padding:
                                                  const EdgeInsets.all(8.0),
                                              child: Text(baiviet
                                                  .elementAt(index)['Like']
                                                  .toString()),
                                            )
                                          ],
                                        ),
                                        Row(
                                          children: [
                                            Icon(Icons.thumb_down_alt_outlined),
                                            Padding(
                                              padding:
                                                  const EdgeInsets.all(8.0),
                                              child: Text(baiviet
                                                  .elementAt(index)['Unlike']
                                                  .toString()),
                                            )
                                          ],
                                        ),
                                        Icon(Icons.share_outlined),
                                      ],
                                    ),
                                  ],
                                ),
                              ),
                            ),
                          )),
                )
              : Center(child: CircularProgressIndicator()),
        ]),
      );
    });
  }
}
