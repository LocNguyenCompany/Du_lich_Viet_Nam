import 'package:du_lich_viet_nam/primary.dart';
import 'package:flutter/material.dart';

class FlightPage extends StatelessWidget {
  const FlightPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: pColor,
      appBar: AppBar(
        backgroundColor: pAppbarColor,
        automaticallyImplyLeading: false,
        title: Text('Tourism App'),
      ),
      body: const Center(
        child: Text('Flight'),
      ),
    );
  }
}
