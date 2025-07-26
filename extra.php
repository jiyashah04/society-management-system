onclick="window.open('admin1.php')"

onclick="window.open('user.php')"
//this is part of sendnotice.php
<div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="send-to">
                    Send To:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="send-to" type="text" placeholder="Enter recipient(s)">
            </div>

            <!DOCTYPE html>  // bills_user
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Maintenance Bills</title>
</head>
<body>
    <h1>Your Maintenance Bills</h1>
    <table border="1">
        <tr>
            <th>Bill ID</th>
            <th>Amount</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['BillID']; ?></td>
                <td><?php echo $row['Amount']; ?></td>
                <td><?php echo $row['DueDate']; ?></td>
                <td><?php echo $row['Status']; ?></td>
                <td>
                    <?php if ($row['Status'] === 'Unpaid') : ?>
                        <form method="POST">
                            <input type="hidden" name="BillID" value="<?php echo $row['BillID']; ?>">
                            <button type="submit">Pay</button>
                        </form>
                    <?php else : ?>
                        Paid
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>