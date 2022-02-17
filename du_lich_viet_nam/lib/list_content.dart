import 'dart:convert';

import 'package:du_lich_viet_nam/detail.dart';
import 'package:du_lich_viet_nam/primary.dart';
import 'package:flutter/material.dart';

import 'api.dart';

class ListContent extends StatefulWidget {
  Map<String, dynamic> diadanh;
  ListContent({required this.diadanh});

  @override
  State<ListContent> createState() => _ListContentState();
}

class _ListContentState extends State<ListContent> {
  Iterable baiviet = [];
  Future<void> getAllBaiViet() async {
    await API(
            url: pUrl +
                "/bai_viet_id_dia_danh/${widget.diadanh['id'].toString()}}")
        .getDataString()
        .then((value) {
      baiviet = json.decode(value);
    });
    setState(() {});
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    getAllBaiViet();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: pColor,
      appBar: AppBar(
        title: Text(
          widget.diadanh['Ten_dia_danh'].toString(),
        ),
        backgroundColor: pAppbarColor,
      ),
      body: ListView.builder(
        itemCount: baiviet.length,
        itemBuilder: (BuildContext context, int index) {
          return GestureDetector(
            onTap: () {
              Navigator.push(
                  context,
                  MaterialPageRoute(
                      builder: (context) => DetailPage(
                            baiviet: baiviet.elementAt(index),
                          )));
            },
            child: Container(
              margin: EdgeInsets.all(8),
              padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
              constraints:
                  BoxConstraints(maxWidth: MediaQuery.of(context).size.width),
              decoration: BoxDecoration(
                  border: Border.all(color: Colors.grey),
                  borderRadius: BorderRadius.all(Radius.circular(8)),
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
                      style:
                          TextStyle(fontSize: 25, fontWeight: FontWeight.bold),
                    ),
                    Container(
                      padding: EdgeInsets.fromLTRB(0, 10, 10, 10),
                      child: Image.network(
                        pUrl +
                            "/images/" +
                            widget.diadanh['Hinh_anh'].toString(),
                        fit: BoxFit.fitWidth,
                        width: MediaQuery.of(context).size.width,
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
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        Row(
                          children: [
                            Icon(Icons.thumb_up_alt_outlined),
                            Padding(
                              padding: const EdgeInsets.all(8.0),
                              child: Text("10"),
                            )
                          ],
                        ),
                        Row(
                          children: [
                            Icon(Icons.thumb_down_alt_outlined),
                            Padding(
                              padding: const EdgeInsets.all(8.0),
                              child: Text("10"),
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
          );
        },
      ),
    );
  }
}
