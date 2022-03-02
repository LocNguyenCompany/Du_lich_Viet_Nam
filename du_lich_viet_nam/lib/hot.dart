import 'package:du_lich_viet_nam/primary.dart';
import 'package:flutter/material.dart';

class HotPage extends StatelessWidget {
  const HotPage({Key? key}) : super(key: key);

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
        child: Text('Hot'),
      ),
    );
  }
}
