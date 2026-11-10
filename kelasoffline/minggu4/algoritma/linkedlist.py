print("===== ARRAY =====")
angka = [2, 8, 16, 12, 4, 24, 42, 20] 
array = angka.copy()
print("Data awal :", array)
array.sort()
print("Data setelah sorting :",array)
print("===== LINKED LIST =====")
class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
class LinkedList:
    def __init__(self):
        self.head = None
    def append(self, data):
        new_node = Node(data)
        if not self.head:
            self.head = new_node
            return
        curr = self.head
        while curr.next:
            curr = curr.next
        curr.next = new_node
    def to_list(self):
        result = []
        curr = self.head
        while curr:
            result.append(curr.data)
            curr = curr.next
        return result
    def sort(self):
        if not self.head or not self.head.next:
            return
        swapped = True
        while swapped:
            swapped = False
            curr = self.head
            while curr.next:
                if curr.data > curr.next.data:
                    curr.data, curr.next.data = curr.next.data, curr.data
                    swapped = True
                curr = curr.next
angka = [2, 8, 16, 12, 4, 24, 42, 20]
llist = LinkedList()
for val in angka:
    llist.append(val)
print("Data awal :", llist.to_list())
llist.sort()
print("Data setelah sorting :", llist.to_list())