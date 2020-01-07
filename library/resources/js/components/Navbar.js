import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route, NavLink} from 'react-router-dom';

import Dashboard from './pages/Dashboard';
import Book from './pages/Book';
import Student from './pages/Student';
import User from './pages/User';

export default class Home extends Component {
    render() {
      return(
        <Router>
        <div>
        <nav className="navbar navbar-expand-lg navbar-light bg-primary">
          <a className="navbar-brand" href="Kindly send me the feedback through starmeup or email
#">Library</a>
            <button className="navbar-toggler" type="button" data-toggle="collapes" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapes navbar-collapes" id="navbarSupportedContent">
                <ul className="navbar-nav mr-auto">
                      <li className="nav-item">
                          <NavLink activeStyle={{color:"white" }} to="/home"  className="nav-link">Dashboard</NavLink>
                      </li>

                      <li className="nav-item">
                          <NavLink activeStyle={{color:"white" }} to="/book" className="nav-link">Book</NavLink>
                      </li>

                      <li className="nav-item">
                          <NavLink activeStyle={{color:"white" }} to="/student"  className="nav-link">Student</NavLink>
                      </li>

                      <li className="nav-item">
                          <NavLink activeStyle={{color:"white" }} to="/user" className="nav-link">User</NavLink>
                      </li>
                </ul>
          </div>
          </nav>
          <Route exact path='/home' component={Dashboard} />
          <Route exact path='/user' component={User} />
          <Route exact path='/student' component={Student} />
          <Route exact path='/book' component={Book} />
          </div>
          </Router>
        );
      }
  }
