#define FFI_SCOPE "POINTS"
// This uses the system include path, and cwd is NOT included in that by default.
#define FFI_LIB "./points.so"

struct point {
    int     x;
    int     y;
};

double distance(struct point first, struct point second);
