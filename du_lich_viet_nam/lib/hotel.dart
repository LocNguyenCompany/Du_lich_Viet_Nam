import 'package:flutter/material.dart';

class HotelPage extends StatelessWidget {
  const HotelPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.purple.shade100,
      appBar: AppBar(
        backgroundColor: Colors.purple.shade300,
        title: Text('Tourism App'),
      ),
      body: const Center(
        child: Text('Hotel'),
      ),
    );
  }
}
