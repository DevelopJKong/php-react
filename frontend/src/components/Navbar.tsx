import styled from "styled-components";
import {Link} from "react-router-dom";

const Container = styled.div`
  width: 100%;
  height: 70px;
  background-color: sliver;
  display: flex;
`;

const Logo = styled.h1`
  display: flex;
  align-items: center;
  flex: 1;
`;

const List = styled.ul`
  display: flex;
  align-items: center;
  flex: 4;
  list-style:none;
`;

const ListItem = styled.li`
    margin-right:20px;
`;

function Navbar() {
    return (
        <Container>
            <Logo>Cafe Small House</Logo>
            <List>
                <ListItem><Link to={"/login"}>Login</Link></ListItem>
                <ListItem><Link to={"/register"}>Register</Link></ListItem>
                <ListItem>About me</ListItem>
            </List>
        </Container>
    );
}

export default Navbar;
