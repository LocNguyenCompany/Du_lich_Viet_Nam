import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class DetailPage extends StatelessWidget {
  const DetailPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(),
      body: const Center(
        child: Text('Detail'),
      ),
    );
  }
}

@override
Widget titleSection = Container(
  padding: const EdgeInsets.all(32),
  child: Row(
    children: [
      Expanded(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Container(
              padding: const EdgeInsets.only(bottom: 8),
              child: const Text(
                'Ba Na Hills',
                style: TextStyle(
                  fontWeight: FontWeight.bold,
                ),
              ),
            ),
            Text(
              'Da Nang, VietNam',
              style: TextStyle(
                color: Colors.grey[500],
              ),
            ),
          ],
        ),
      ),
      Icon(
        Icons.star,
        color: Colors.red[600],
      ),
      const Text('5'),
    ],
  ),
);
Widget textSection = const Padding(
  padding: EdgeInsets.all(25),
  child: Text(
    'Bà Nà Hills còn được gọi là núi Bà Nà, nằm ở xã Hòa Ninh, '
    'huyện Hòa Vang, cách trung tâm thành phố Đà Nẵng gần 30km '
    'về hướng Tây Nam. Bà Nà Hills vốn là một ngọn núi thuộc '
    'dãy Trường Sơn, trong đó có đỉnh cao nhất là núi Chúa với '
    ' độ cao 1.489m so với mực nước biển.',
    softWrap: true,
  ),
);
