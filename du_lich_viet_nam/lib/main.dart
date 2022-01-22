<<<<<<< Updated upstream
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
=======
import 'package:flutter/material.dart';
import 'account.dart';
import 'culinary.dart';
import 'flight.dart';
import 'home.dart';
import 'hot.dart';
import 'hotel.dart';
import 'login.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  static const String _title = 'TourismApp';

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: _title,
      home: LoginPage(),
      debugShowCheckedModeBanner: false,
    );
  }
}

class MyStatefulWidget extends StatefulWidget {
  Iterable info;
  MyStatefulWidget({required this.info});

  @override
  State<MyStatefulWidget> createState() => _MyStatefulWidgetState();
}

class _MyStatefulWidgetState extends State<MyStatefulWidget> {
  int _selectedIndex = 0;
  TextStyle optionStyle = TextStyle(fontSize: 30, fontWeight: FontWeight.bold);

  void _onItemTapped(int index) {
    setState(() {
      _selectedIndex = index;
    });
  }

  @override
  Widget build(BuildContext context) {
    List<Widget> _widgetOptions = <Widget>[
      HomePage(),
      HotPage(),
      HotelPage(),
      FlightPage(),
      CulinaryPage(),
      AccountPage(info: widget.info),
    ];
    return Scaffold(
      body: Center(
        child: _widgetOptions.elementAt(_selectedIndex),
      ),
      bottomNavigationBar: BottomNavigationBar(
        items: const <BottomNavigationBarItem>[
          BottomNavigationBarItem(
            icon: Icon(Icons.home),
            label: 'Home',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.local_fire_department),
            label: 'Hot',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.apartment),
            label: 'Hotel',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.flight),
            label: 'Flight',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.lunch_dining),
            label: 'Culinary',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.account_circle),
            label: 'Account',
          ),
        ],
        currentIndex: _selectedIndex,
        selectedItemColor: Colors.purple.shade300,
        unselectedItemColor: Colors.grey,
        onTap: _onItemTapped,
      ),
    );
  }
}
>>>>>>> Stashed changes
