#define FFI_SCOPE "POINTS"
#define FFI_LIB "./points/target/release/libpoints.so"

struct Point {
  uint8_t x;
  uint8_t y;
};

double distance(struct Point p1, struct Point p2);
