// ignore_for_file: prefer_const_constructors

import 'package:du_lich_viet_nam/profile.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class AccountPage extends StatelessWidget {
  Iterable info;
  AccountPage({required this.info});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.purple.shade100,
      appBar: AppBar(
        backgroundColor: Colors.purple.shade300,
        automaticallyImplyLeading: false,
        title: Text('Tourism App'),
      ),
      body: ProfilePage(
        info: info,
      ),
    );
  }
}
