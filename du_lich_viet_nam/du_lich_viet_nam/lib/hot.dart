import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class HotPage extends StatelessWidget {
  const HotPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.purple.shade100,
      appBar: AppBar(
        backgroundColor: Colors.purple.shade300,
        automaticallyImplyLeading: false,
        title: Text('Tourism App'),
      ),
      body: const Center(
        child: Text('Hot'),
      ),
    );
  }
}
