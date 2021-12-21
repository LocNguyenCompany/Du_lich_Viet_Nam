import 'package:du_lich_viet_nam/page/dang_ki.dart';
import 'package:du_lich_viet_nam/page/dang_nhap.dart';
import 'package:du_lich_viet_nam/page/trang_ca_nhan.dart';
import 'package:du_lich_viet_nam/page/trang_chi_tiet.dart';
import 'package:du_lich_viet_nam/page/trang_chu.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatefulWidget {
  MyApp({Key? key}) : super(key: key);

  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Named Routes Demo',
      initialRoute: '/',
      routes: {
        '/': (context) => LoginPage(),
        '/Signup': (context) => SignupPage(),
        '/Home': (context) => HomePage(),
        '/Profile': (context) => ProfilePage(),
        '/Detail': (context) => DetailPage(),
      },
    );
  }
}
