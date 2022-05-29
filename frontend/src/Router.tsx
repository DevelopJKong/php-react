import {BrowserRouter, Route, Switch} from "react-router-dom";
import Home from "./pages/Home";
import Login from "./pages/Login";

function Router() {
    return (
        <BrowserRouter>
            <Switch>
                <Route exact path="/">
                    <Home/>
                </Route>
                <Route exact path="/login">
                    <Login/>
                </Route>
            </Switch>
        </BrowserRouter>
    );
}

export default Router;