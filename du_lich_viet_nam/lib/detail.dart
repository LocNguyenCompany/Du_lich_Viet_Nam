import 'dart:convert';
import 'package:du_lich_viet_nam/primary.dart';
import 'package:flutter/material.dart';
import 'package:map_launcher/map_launcher.dart';
import 'api.dart';

class DetailPage extends StatefulWidget {
  Map<String, dynamic> baiviet;
  DetailPage({required this.baiviet});

  @override
  State<DetailPage> createState() => _DetailPageState();
}

class _DetailPageState extends State<DetailPage> {
  Map<String, dynamic> diadanh = {};
  Future<void> chitietdiadanh() async {
    await API(url: pUrl + "/id_dia_danh/${widget.baiviet['Dia_danh']}")
        .getDataString()
        .then((value) {
      diadanh = json.decode(value);
    });
    setState(() {});
  }

  @override
  void initState() {
    super.initState();
    chitietdiadanh();
  }

  void openMap(Map<String, dynamic> diadanh) async {
    final availableMaps = await MapLauncher.installedMaps;
    await availableMaps.first.showMarker(
      coords: Coords(double.parse(diadanh['Kinh_do'].toString()),
          double.parse(diadanh['Vi_do'].toString())),
      title: diadanh['Ten_dia_danh'],
    );
    print("object");
  }

  @override
  Widget build(BuildContext context) {
    return LayoutBuilder(
        builder: (BuildContext context, BoxConstraints constraints) {
      return Scaffold(
          appBar: AppBar(
            backgroundColor: pAppbarColor,
            title: Text('Location details'),
          ),
          body: diadanh.isNotEmpty
              ? ListView(
                  children: [
                    Container(
                      padding: const EdgeInsets.all(32),
                      child: Row(
                        children: [
                          Expanded(
                              child: Column(
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                Container(
                                  child: Image.network(
                                    pUrl +
                                        '/images/' +
                                        diadanh['Hinh_anh'].toString(),
                                  ),
                                ),
                                Container(
                                  padding:
                                      const EdgeInsets.fromLTRB(0, 10, 0, 10),
                                  child: Row(
                                    children: [
                                      IconButton(
                                        onPressed: () {
                                          openMap(diadanh);
                                          setState(() {});
                                        },
                                        icon: Icon(
                                          Icons.location_on_outlined,
                                          color: Colors.grey,
                                        ),
                                      ),
                                      Text(
                                        diadanh['Kinh_do'].toString() +
                                            ", " +
                                            diadanh['Vi_do'].toString(),
                                        style: TextStyle(
                                          color: Colors.grey,
                                        ),
                                      ),
                                    ],
                                  ),
                                ),
                                Text(
                                  diadanh['Ten_dia_danh'].toString(),
                                  style: TextStyle(
                                    fontSize: 22,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                Container(
                                  child: Padding(
                                    padding: EdgeInsets.all(2),
                                    child: Text(
                                      widget.baiviet["Noi_dung"].toString(),
                                      softWrap: true,
                                      style: TextStyle(fontSize: 30),
                                    ),
                                  ),
                                ),
                              ])),
                        ],
                      ),
                    ),
                  ],
                )
              : Center(child: CircularProgressIndicator()));
    });
  }
}
