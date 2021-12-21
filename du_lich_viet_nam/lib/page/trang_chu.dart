import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  HomePage({Key? key}) : super(key: key);

  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Column(
        children: [
          Container(
            height: 50,
            margin: EdgeInsets.all(30),
            child: ListView(
              children: [
                Text(
                  "data",
                  style: TextStyle(fontSize: 30),
                ),
              ],
            ),
          )
        ],
      ),
    );
  }
}
