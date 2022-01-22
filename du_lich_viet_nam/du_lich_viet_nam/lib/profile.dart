import 'dart:convert';

import 'package:flutter/material.dart';

import 'api.dart';

class ProfilePage extends StatefulWidget {
  Iterable info;
  ProfilePage({required this.info});

  @override
  _ProfilePageState createState() => _ProfilePageState();
}

class _ProfilePageState extends State<ProfilePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SingleChildScrollView(
        child: Column(
          children: [
            Stack(
              children: [
                Container(
                  height: 300,
                  width: 500,
                  color: Colors.white,
                ),
                Container(
                  height: 200,
                  width: 500,
                  child: Image.asset(
                    "assets/img/background.jpg",
                    fit: BoxFit.cover,
                  ),
                ),
                Positioned(
                  top: 150,
                  left: 350,
                  child: ClipRRect(
                    borderRadius: BorderRadius.all(Radius.circular(5)),
                    child: Container(
                      height: 30,
                      width: 50,
                      color: Colors.white,
                      child: Icon(Icons.camera_alt),
                    ),
                  ),
                ),
                Positioned(
                  top: 100,
                  left: 125,
                  child: CircleAvatar(
                    radius: 80,
                    backgroundColor: Colors.white,
                    child: CircleAvatar(
                      radius: 75,
                      backgroundImage: AssetImage("assets/img/background.jpg"),
                    ),
                  ),
                ),
                Positioned(
                  top: 200,
                  left: 240,
                  child: CircleAvatar(
                    radius: 22,
                    backgroundColor: Colors.grey.shade300,
                    child: Icon(
                      Icons.camera_alt,
                      color: Colors.black,
                    ),
                  ),
                )
              ],
            ),
            Text(
              widget.info.elementAt(0)['kq1']['username'].toString(),
              style: TextStyle(
                  fontFamily: "Lora",
                  fontWeight: FontWeight.bold,
                  fontSize: 24),
            ),
            Text("Chuyên viên du lịch"),
            SizedBox(
              height: 15,
            ),
            Row(
              children: [
                ClipRRect(
                  borderRadius: BorderRadius.all(Radius.circular(15)),
                  child: Container(
                    width: 300,
                    height: 50,
                    color: Colors.cyan,
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceAround,
                      children: [
                        CircleAvatar(
                          backgroundColor: Colors.white,
                          radius: 15,
                          child: Icon(Icons.add),
                        ),
                        Text(
                          "Add to story",
                          style: TextStyle(color: Colors.white),
                        ),
                        SizedBox(
                          height: 15,
                        ),
                      ],
                    ),
                  ),
                ),
                SizedBox(
                  width: 15,
                ),
                ClipRRect(
                  borderRadius: BorderRadius.all(Radius.circular(15)),
                  child: Container(
                    width: 80,
                    height: 50,
                    color: Colors.grey.shade400,
                    child: Icon(Icons.menu),
                  ),
                ),
              ],
            ),
            SizedBox(
              height: 15,
            ),
            Divider(
              thickness: 1.5,
              color: Colors.grey.shade300,
            ),
            SizedBox(
              height: 15,
            ),
            ListTile(
              leading: Icon(Icons.school),
              title: Text("Cao Thang Technical College"),
            ),
            ListTile(
              leading: Icon(Icons.star_border),
              title: Text("Follow: 5000"),
            ),
            ListTile(
              leading: Icon(Icons.location_on_outlined),
              title: Text("Ho Chi Minh City"),
            ),
            ListTile(
              leading: Icon(Icons.email_outlined),
              title: Text("ntllngam@gmail.com"),
            ),
            ListTile(
              leading: Icon(Icons.inbox_outlined),
              title: Text("gamxinhdep"),
            ),
            SizedBox(
              height: 15,
            ),
            Divider(
              thickness: 1.5,
              color: Colors.grey.shade300,
            ),
          ],
        ),
      ),
    );
  }
}
