INSERT INTO Users (UserID, Username, FirstName, LastName, DateOfBirth, Password)
VALUES 
(1, 'johndoe', 'John', 'Doe', '1990-01-15', 'password123'),
(2, 'janesmith', 'Jane', 'Smith', '1985-07-22', 'password456'),
(3, 'jenniselapuz', 'Jennise', 'Lapuz', '2000-01-01', 'lapuz123'),
(4, 'rifenlapuz', 'Rifen', 'Lapuz', '2004-12-31', 'lapuz000')

INSERT INTO Friends (FriendID, FriendWhoAdded, FriendBeingAdded, IsAccepted)
VALUES 
(1, 1, 2, TRUE),
(2, 1, 3, FALSE),
(3, 2, 4, TRUE),
(4, 2, 3, TRUE);

INSERT INTO Groups (GroupID, GroupName, CreatedBy)
VALUES 
(1, 'Nature Enthusiasts', 1),
(2, 'Tech Innovators', 2),
(3, 'Book Club', 3),
(4, 'Mobile Legends', 4);

INSERT INTO Posts (PostID, PostDescription, PostedBy, IsPublic, IsOnlyForFriends, GroupID)
VALUES 
(1, 'Loving the new tech trends!', 2, TRUE, FALSE, 2),
(2, 'Exploring the great outdoors', 1, TRUE, TRUE, 1),
(3, 'Just finished reading an amazing book', 3, FALSE, TRUE, 3)
(4, 'ML players', 4, TRUE, FALSE, 4);

INSERT INTO GroupMembershipRequests (GroupMemberShipRequestsID, GroupID, GroupMemberUserID, IsGroupMemberShipAccepted)
VALUES 
(1, 1, 2, TRUE),
(2, 2, 1, FALSE),
(3, 3, 2, TRUE),
(4, 4, 3, TRUE),
(5, 4, 4, TRUE);
