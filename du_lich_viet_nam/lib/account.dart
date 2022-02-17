// ignore_for_file: prefer_const_constructors

import 'package:du_lich_viet_nam/primary.dart';
import 'package:du_lich_viet_nam/profile.dart';
import 'package:flutter/material.dart';

class AccountPage extends StatefulWidget {
  Iterable info;
  AccountPage({required this.info});

  @override
  State<AccountPage> createState() => _AccountPageState();
}

class _AccountPageState extends State<AccountPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: pColor,
      appBar: AppBar(
        backgroundColor: pAppbarColor,
        automaticallyImplyLeading: false,
        title: Text('Tourism App'),
      ),
      body: ProfilePage(
        info: widget.info,
      ),
    );
  }
}
