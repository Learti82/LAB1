import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Dashboard from './components/Dashboard';
import Home from './components/Home';
import About from './components/About';
import Login from './components/Login';
import Register from './components/Register';

function App() {
    return (
        <Router>
            <Switch>
                <Route path="/" exact component={Home} />
                <Route path="/about" component={About} />
                <Route path="/login" component={Login} />
                <Route path="/register" component={Register} />
                <Route path="/dashboard" component={Dashboard} />
            </Switch>
        </Router>
    );
}

ReactDOM.render(<App />, document.getElementById('app'));
