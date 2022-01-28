import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class DetailPage extends StatelessWidget {
  const DetailPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          backgroundColor: Colors.purple.shade300,
          automaticallyImplyLeading: false,
          title: Text('Location details'),
        ),
        body: Container(
          padding: const EdgeInsets.all(32),
          child: Row(
            children: [
              Expanded(
                  child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                    Container(
                      child: Image.asset(
                        'assets/img/cungdinhhue.jpg',
                        width: 200,
                        height: 120,
                      ),
                    ),
                    Container(
                      padding: const EdgeInsets.only(bottom: 8),
                      child: Row(
                        children: [
                          Icon(
                            Icons.location_on_outlined,
                            color: Colors.grey,
                          ),
                          Text(
                            'Da Nang, VietNam',
                            style: TextStyle(
                              color: Colors.grey,
                            ),
                          ),
                        ],
                      ),
                    ),
                    Text(
                      'Bà Nà Hills',
                      style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    Container(
                      child: Padding(
                        padding: EdgeInsets.all(2),
                        child: Text(
                          'Bà Nà Hills còn được gọi là núi Bà Nà, nằm ở xã Hòa Ninh, '
                          'huyện Hòa Vang, cách trung tâm thành phố Đà Nẵng gần 30km '
                          'về hướng Tây Nam. Bà Nà Hills vốn là một ngọn núi thuộc '
                          'dãy Trường Sơn, trong đó có đỉnh cao nhất là núi Chúa với '
                          ' độ cao 1.489m so với mực nước biển.',
                          softWrap: true,
                        ),
                      ),
                    ),
                  ])),
            ],
          ),
        ));
  }
}
